import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
         
        int a, b, c, maiorAB, maior;
         
        a = sc.nextInt();
        b = sc.nextInt();
        c = sc.nextInt();
        
        maiorAB = maiorNum(a, b);
        maior = maiorNum(maiorAB, c);
        
        System.out.println(maior + " eh o maior");
        
        sc.close();
    }
    
    public static int maiorNum(int x, int y) {
        return (x + y + Math.abs(x - y)) / 2;
    }
}
