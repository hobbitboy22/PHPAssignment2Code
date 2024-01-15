# This test will navigate all of the buttons on the navbar
# It will also have to log in to view the navbar items that are restricted to logged-in users only

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

print('Login button clicked')

EmailInput = driver.find_element(By.ID, ('email'))
EmailInput.send_keys("example@gmail.com")

PasswordInput = driver.find_element(By.ID, 'password')
PasswordInput.send_keys('P@ssword1')

time.sleep(1)

LoginButton = driver.find_element(By.XPATH, '/html/body/form/section/div/div/div/div/div/button')
LoginButton.click()

print('Members page button clicked')

time.sleep(1)

ManageUsersNavButton = driver.find_element(By.XPATH, ('//*[@id="navbarNav"]/ul/a'))
ManageUsersNavButton.click()

print('Manage users button clicked')

time.sleep(1)

ManageEquipmentNavButton = driver.find_element(By.XPATH, ('//*[@id="navbarNav"]/ul/li[2]/a'))
ManageEquipmentNavButton.click()

print('Manage equipment button clicked')

time.sleep(60)

# Close the browser window
driver.quit()