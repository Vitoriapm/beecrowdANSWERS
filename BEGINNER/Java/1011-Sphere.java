import java.util.Scanner;

public class Main{
    public static void main(String[]args){
        Scanner sc = new Scanner(System.in);
        
        double pi = 3.14159;
        double R = sc.nextInt();
        double volume = (4/3.0)*pi*Math.pow(R,3);
        
        System.out.println("VOLUME = " + String.format("%.3f", volume));
    }
}
