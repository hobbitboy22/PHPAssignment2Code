# This test will register a user from the register page
# The newly created user will then be logged in to show that registration process worked

from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time

# Path to ChromeDriver
# chrome_driver_path = 'D:\Code\Individual Project\PHPAssignment2Code\Selenium\chromedriver.exe'
chrome_driver_path = 'C:\laragon\www\Jack Hine\A2(New)\Selenium\chromedriver.exe'

# Specify the location of ChromeDriver
service = Service(chrome_driver_path)

# Create the driver with the specified location of ChromeDriver
driver = webdriver.Chrome(service = service)

# Navigate to a website
driver.get('http://localhost/Jack%20Hine/A2(New)/')
driver.maximize_window()

LoginNavButton = driver.find_element(By.XPATH, ('//*[@id="navbarNav"]/ul/li[2]/a'))
LoginNavButton.click()

CreateAccountButton = driver.find_element(By.XPATH, '/html/body/form/section/div/div/div/div/div/a')
CreateAccountButton.click()

FirstNameInput = driver.find_element(By.ID, 'fname')
FirstNameInput.send_keys("Random")

LastNameInput = driver.find_element(By.ID, 'sname')
LastNameInput.send_keys("Account")

EmailInput = driver.find_element(By.ID, 'email')
EmailInput.send_keys('account@test.com')

PasswordInput = driver.find_element(By.ID, 'password')
PasswordInput.send_keys('P@ssword1')

VerifyPasswordInput = driver.find_element(By.ID, 'password-v')
VerifyPasswordInput.send_keys('P@ssword1')

time.sleep(2)

RegisterAccountButton = driver.find_element(By.XPATH, '/html/body/form/section/div/div/div/div/div/button')
RegisterAccountButton.click()

time.sleep(2)

EmailLoginInInput = driver.find_element(By.ID, 'email')
EmailLoginInInput.send_keys('account@test.com')

PasswordLogInInput = driver.find_element(By.ID, 'password')
PasswordLogInInput.send_keys('P@ssword1')

time.sleep(2)

LogInButton = driver.find_element(By.XPATH, '')
LogInButton.click()

time.sleep(60)

# Close the browser window
driver.quit()
