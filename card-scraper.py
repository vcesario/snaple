from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import jsonpickle

# declaring class
class GameCard:
    Id = ''
    Energy = 0
    Power = 0
    Url = ''
    PowerType = ''

# reading key.conf
keys = {}
with open('key.conf', 'r') as keyfile:
    content = keyfile.read().splitlines()

for line in content:
    parts = line.split('=')
    keys[parts[0].strip()] = parts[1].strip()

# opening website and fetching raw data
driver = webdriver.Chrome(keys['chromedriver-path'])
driver.set_page_load_timeout(5)

try:
    driver.get('https://marvelsnapzone.com/cards/')
except:
    pass

cardListDiv = driver.find_element(By.CSS_SELECTOR, 'div.cards-list')
cardElements = cardListDiv.find_elements(By.CSS_SELECTOR, 'a')

released = []
unreleased = []
for e in cardElements:
    card = GameCard()
    card.Id = e.get_attribute('data-name')
    card.Energy = e.get_attribute('data-cost')
    card.Power = e.get_attribute('data-power')
    card.Url = e.get_attribute('data-src')
    card.PowerType = e.get_attribute('data-tags')
    
    cardStatus = e.get_attribute('data-status')

    if cardStatus == 'released':
        released.append(card)
    else:
        unreleased.append(card)

driver.close()

# writing data to disk
cardStrings = jsonpickle.encode(released)
with open('card-data.json', 'w') as cd:
    cd.write(cardStrings)