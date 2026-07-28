import java.io.IOException;
import java.util.Scanner;

public class Main {
 
    public static void main(String[] args) throws IOException {
 
        Scanner sc = new Scanner(System.in);
        
        int distance = sc.nextInt();    // km
		int total = distance * 2;       // minutes
		
		System.out.println(total + " minutos");
        
        sc.close();
 
    }
 
}
