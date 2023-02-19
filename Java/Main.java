class Main {
    public static void main(String[] args) {
        UberX uberx = new UberX("AMQ123", new Account("Kevin Lopez", "KLO123"), "Chevrolet", "Sail");
        uberx.setPassengers(4);
        uberx.printDataCar();

        UberVan ubervan = new UberVan("AMQ123", new Account("Kevin Lopez", "KLO123"));
        ubervan.setPassengers(6);
        ubervan.printDataCar();
    }
}