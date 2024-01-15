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

# Get and print the title of the page
print('Page Title:', driver.title)

time.sleep(60)

# Close the browser window
driver.quit()