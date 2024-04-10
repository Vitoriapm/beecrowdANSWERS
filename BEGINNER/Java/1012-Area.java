import java.util.Scanner;

public class Main{
    public static void main(String[]args){
        Scanner sc = new Scanner(System.in);
        
        double A = sc.nextDouble();
        double B = sc.nextDouble();
        double C = sc.nextDouble();
        
        double triangleArea = (A*C)/2;
        double circleArea = 3.14159*Math.pow(C,2);
        double trapeziumArea = (A+B)*(C/2);
        double squareArea = B*B;
        double rectangleArea = A*B;
        
        System.out.println("TRIANGULO: " + String.format("%.3f", triangleArea));
        System.out.println("CIRCULO: " + String.format("%.3f", circleArea));
        System.out.println("TRAPEZIO: " + String.format("%.3f", trapeziumArea));
        System.out.println("QUADRADO: " + String.format("%.3f", squareArea));
        System.out.println("RETANGULO: " + String.format("%.3f", rectangleArea));
    }
}
