from account import Account

class Car:
    id = int
    license = str
    driver = Account("","")
    _passengers = int

    def __init__(self, license, driver):
        self.license = license
        self.driver = driver
        self._passengers = None

    def printDataCar(self):
        if self._passengers is not None:
            print(f'License: {self.license}\nDriver: {self.driver.name}\nPassengers: {self._passengers}')

    def setPassengers(self, passengers):
        if passengers == 4:
            self._passengers = passengers
        else:
            print('Necesita ingresar 4 pasajeros')