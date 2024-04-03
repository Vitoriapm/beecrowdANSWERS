import java.util.Scanner;

public class Main{
    public static void main(String[]args){
        Scanner sc = new Scanner(System.in);
        int number = sc.nextInt();
        int hoursMonth = sc.nextInt();
        double amountHr = sc.nextDouble();
        double salary = hoursMonth * amountHr;
        System.out.println("NUMBER = " + number);
        System.out.println("SALARY = U$ " + String.format("%.2f",salary));
    }
}
