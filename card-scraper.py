from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By

# reading key.conf
keys = {}
with open('key.conf', 'r') as keyfile:
    content = keyfile.read().splitlines()

for line in content:
    parts = line.split('=')
    keys[parts[0].strip()] = parts[1].strip()

# opening website and fetching raw data
driver = webdriver.Chrome(keys['chromedriver-path'])
driver.get('https://marvelsnapzone.com/cards/')
cards = driver.find_elements(By.CSS_SELECTOR, 'a.simple-card.hasvariants')
cards_list = []
for p in range(len(cards)):
    cards_list.append(cards[p].text)
print(cards_list)
driver.close()