package solid.i;

public interface IProduct {

    String getType();

}



package solid.i;

public interface IRestrictedProduct {

    int getAge();

}


package solid.i;

class Shoes implements IProduct {

    @Override
    public String getType() {
        return "shoes";
    }

}


package solid.i;

class Games implements IProduct, IRestrictedProduct {

    private int age;

    @Override
    public String getType() {
        return "game";
    }

    @Override
    public int getAge() {
        return age;
    }

    // get and set..

}
