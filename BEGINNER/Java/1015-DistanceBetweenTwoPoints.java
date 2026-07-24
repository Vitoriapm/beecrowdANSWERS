import java.io.IOException;
import java.util.Scanner;

public class Main {
 
    public static void main(String[] args) throws IOException {
 
      	Scanner sc = new Scanner(System.in);
		double x1, y1, x2, y2;
		
  		x1 = sc.nextDouble();	
  		y1 = sc.nextDouble();	
  		x2 = sc.nextDouble();	
  		y2 = sc.nextDouble();	
  		
  		double distance = Math.sqrt(
  			    Math.pow(x2 - x1, 2) +
  			    Math.pow(y2 - y1, 2)
			);

		System.out.printf("%.4f%n", distance);
			
		sc.close();	
    }

}
