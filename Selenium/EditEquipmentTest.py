# This test will be to edit an existing piece of equipment

from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time

# Path to ChromeDriver
chrome_driver_path = 'D:\Code\Individual Project\PHPAssignment2Code\Selenium\chromedriver.exe'
# chrome_driver_path = 'C:\laragon\www\Jack Hine\A2(New)\Selenium\chromedriver.exe'

# Specify the location of ChromeDriver
service = Service(chrome_driver_path)

# Create the driver with the specified location of ChromeDriver
driver = webdriver.Chrome(service = service)

# Navigate to a website
driver.get('http://localhost/Individual%20Project/PHPAssignment2Code/index.php')
driver.maximize_window()

LoginNavButton = driver.find_element(By.XPATH, ('//*[@id="navbarNav"]/ul/li[2]/a'))
LoginNavButton.click()

EmailInput = driver.find_element(By.ID, ('email'))
EmailInput.send_keys("example@gmail.com")

PasswordInput = driver.find_element(By.ID, 'password')
PasswordInput.send_keys('P@ssword1')

LoginButton = driver.find_element(By.XPATH, '/html/body/form/section/div/div/div/div/div/button')
LoginButton.click()

EditButton = driver.find_element(By.XPATH, '/html/body/div[1]/table/tbody[2]/tr/td[7]/form[1]/button')
EditButton.click()

ItemName = driver.find_element(By.XPATH, '/html/body/div[1]/table/tbody[2]/tr/td[7]/form[1]/button')
ItemName.send_keys('New Carrot')

ItemDescription = driver.find_element(By.XPATH, '//*[@id="edititemmodal"]/div/div/div[2]/form/div[2]/input')
ItemDescription.send_keys('A new description')

ItemStock = driver.find_element(By.XPATH, '//*[@id="edititemmodal"]/div/div/div[2]/form/div[3]/input')
ItemStock.send_keys('5')

ItemBuyPrice = driver.find_element(By.XPATH, '//*[@id="edititemmodal"]/div/div/div[2]/form/div[4]/input')
ItemBuyPrice.send_keys('1')

ItemSellPrice = driver.find_element(By.XPATH, '//*[@id="edititemmodal"]/div/div/div[2]/form/div[5]/input')
ItemSellPrice.send_keys('1.25')

ConfirmButton = driver.find_element(By.XPATH, '//*[@id="edititemmodal"]/div/div/div[2]/form/div[7]/button[1]')
ConfirmButton.click()

print('Equipment has been edited')

time.sleep(60)

# Close the browser window
driver.quit()