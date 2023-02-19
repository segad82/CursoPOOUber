from payment import Payment

class PayPal(Payment):
    email = str

    def __init__(self, email):
        self.email = email