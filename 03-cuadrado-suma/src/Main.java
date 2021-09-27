import java.util.Scanner;

public class Main {

    public static void main(String[] args){
            System.out.println("Programa para calcular el cuadrado de una suma ");
            System.out.println("Ingrese el valor de A");
            int A = 0;
            Scanner entrada1 = new Scanner(System.in);
            A  = entrada1.nextInt();
            System.out.println("Ingrese el valor de B");
            int B = 0;
            Scanner entrada2 = new Scanner(System.in);
            B  = entrada2.nextInt();
            System.out.println("El resultado es el Siguiente: ");
            System.out.println( Math.pow(A,2 ) + (2*(A*B)) + Math.pow(B,2 ));

    }


}
