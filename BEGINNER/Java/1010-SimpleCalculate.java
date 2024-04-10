import java.util.Scanner;

public class Main{
    public static void main(String[]args){
        Scanner sc = new Scanner(System.in);
        
        int cod1, cod2, unit1, unit2;
        double price1, price2;
        
        cod1 = sc.nextInt();
        unit1 = sc.nextInt();
        price1 = sc.nextDouble();
        
        cod2 = sc.nextInt();
        unit2 = sc.nextInt();
        price2 = sc.nextDouble();
        
        double total = (unit1*price1) + (unit2*price2);
        
        System.out.println("VALOR A PAGAR: R$ " + String.format("%.2f", total));
    }
}
