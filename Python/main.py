from car import Car
from account import Account

if __name__ == "__main__":
    print('Hola Mundo')
    car = Car('AMQ123', Account('Kevin Lopez', 'KLO123'))
    print(vars(car))
    print(vars(car.driver))