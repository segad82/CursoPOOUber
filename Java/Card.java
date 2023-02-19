class Card extends Payment {
    Integer number;
    Integer cvv;
    String date;

    public Card(Integer number, Integer cvv, String date){
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }
}
