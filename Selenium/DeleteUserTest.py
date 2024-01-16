# This test will navigate to the user management screen and then delete a user

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

UserNavigationButton = driver.find_element(By.XPATH, '//*[@id="navbarNav"]/ul/a')
UserNavigationButton.click()

DeleteUser = driver.find_element(By.XPATH, '/html/body/div[1]/table/tbody[2]/tr[7]/td[5]/form/button')
DeleteUser.click()

print('The user accound has been successfully deleted')

time.sleep(60)

# Close the browser window
driver.quit()