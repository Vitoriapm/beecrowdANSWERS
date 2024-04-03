import java.util.Scanner;

public class Main{
    public static void main(String[]args){
        Scanner sc = new Scanner(System.in);
        double n = 3.14159;
        double R = sc.nextDouble();
        double A = n*Math.pow(R,2);
        System.out.println("A=" + String.format("%.4f",A));
    }
}
