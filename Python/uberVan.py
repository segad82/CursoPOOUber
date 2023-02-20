from car import Car

class UberVan(Car):
    typeCarAccepted = []
    seatsMaterial = []

    def __init__(self, license, driver, typeCarAccepted, seatsMaterial):
        super().__init__(license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial
    
    def setPassengers(self, passengers):
        if passengers == 6:
            self._passengers = passengers
        else:
            print('Necesita ingresar 6 pasajeros')