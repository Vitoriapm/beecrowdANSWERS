import java.util.Scanner;

public class Main{
    public static void main(String[]args){
        Scanner sc = new Scanner(System.in);
        String name = sc.nextLine();
        double fixedSalary = sc.nextDouble();
        double sales = sc.nextDouble();
        double finalSalary = ((sales/100) * 15) + fixedSalary;
        System.out.println("TOTAL = R$ " + String.format("%.2f",finalSalary));
    }
}
