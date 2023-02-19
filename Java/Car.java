class Car {
    private Integer id;
    private String license;
    private Account driver;
    private Integer passengers;

    public Car(String license, Account driver) {
        this.license = license;
        this.driver = driver;
    }

    public void printDataCar() {
        if(this.passengers != null)
            System.out.println("License: " + this.license + "\nDriver: " + this.driver.name);
    }

    public String getLicense() {
        return license;
    }

    public void setLicense(String license) {
        this.license = license;
    }

    public Account getDriver() {
        return driver;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }

    public Integer getPassengers() {
        return passengers;
    }

    public void setPassengers(Integer passengers) {
        if(passengers == 4)
            this.passengers = passengers;
        else
            System.out.println("Necesita ingresar 4 pasajeros");
    }

}