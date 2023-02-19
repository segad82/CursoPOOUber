from user import User
from car import Car
from route import Route
from payment import Payment

class Trip:
    user = User
    car = Car
    route = Route
    payment = Payment
    amount = int
    progress = int
    completed = bool

    def __init__(self, user, car, route, payment):
        self.user = user
        self.car = car
        self.route = route
        self.payment = payment