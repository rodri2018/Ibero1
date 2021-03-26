package solid.d;

interface Persistence {

    void save(Product product, PaymentType paymentType);

}


package solid.d;

class MySqlDatabase implements Persistence {

    public void save(Product product, PaymentType paymentType) {
        System.out.println("Save product " + product + " paymentType " + paymentType);
        // save into MySqlDatabase...
    }

}

