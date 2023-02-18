class Car {
    Integer id;
    String license;
    Account driver;
    Integer passengers;

    public Car(String license, Account driver) {
        this.license = license;
        this.driver = driver;
    }

    public void printDataCar() {
        System.out.println("License: " + this.license + "\nDriver: " + this.driver.name);
    }

}