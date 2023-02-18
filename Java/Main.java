class Main {
    public static void main(String[] args) {
        Car car = new Car("AMQ123", new Account("Kevin Lopez", "KLO123"));
        car.passengers = 4;
        car.printDataCar();
    }
}