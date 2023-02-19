class Trip {
    Integer id;
    User user;
    Car car;
    Route route;
    Payment payment;
    Double amount;
    Double progress;
    Boolean completed;

    public Trip(User user, Car car, Route route, Payment payment){
        this.user = user;
        this.car = car;
        this.route = route;
        this.payment = payment;
    }
}
