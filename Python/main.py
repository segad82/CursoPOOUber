from uberVan import UberVan
from uberX import UberX
from account import Account

if __name__ == "__main__":
    uberX = UberX('AMQ123', Account('Kevin Lopez', 'KLO123'), 'Chevrolet', 'Sail')
    uberX.setPassengers(4)
    uberX.printDataCar()

    uberVan = UberVan('QWE123', Account('Pablo Lopez', 'PLO123'),[], [])
    uberVan.setPassengers(6)
    uberVan.printDataCar()
    #print(vars(car))
    #print(vars(car.driver))