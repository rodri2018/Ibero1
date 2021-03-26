package solid;

public class RaceCar extends Car {

    @Override
    void accelerate() {
        injectExtraGas();
        super.accelerate();
    }

    private void injectExtraGas() {
        // do..
    }

}


