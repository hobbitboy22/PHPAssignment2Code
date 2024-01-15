# This test will test if the input verification system works
# Wrong information will be inputted when creating an account and the account should not be created

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

CreateAccountButton = driver.find_element(By.XPATH, '/html/body/form/section/div/div/div/div/div/a')
CreateAccountButton.click()

FirstNameInput = driver.find_element(By.ID, 'fname')
FirstNameInput.send_keys("123")

LastNameInput = driver.find_element(By.ID, 'sname')
LastNameInput.send_keys("no")

EmailInput = driver.find_element(By.ID, 'email')
EmailInput.send_keys('accountcom')

PasswordInput = driver.find_element(By.ID, 'password')
PasswordInput.send_keys('randomwords')

VerifyPasswordInput = driver.find_element(By.ID, 'password-v')
VerifyPasswordInput.send_keys('incorrect')

time.sleep(2)

RegisterAccountButton = driver.find_element(By.XPATH, '/html/body/form/section/div/div/div/div/div/button')
RegisterAccountButton.click()

print('New account was not able to be created')

time.sleep(60)

# Close the browser window
driver.quit()
