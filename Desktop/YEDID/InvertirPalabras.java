import java.util.Scanner;
import java.util.Stack;
public class InvertirPalabras {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Introduce una frase: ");
        String fraseUsuario = scanner.nextLine();
        String fraseInvertida = invertirPalabras(fraseUsuario);
        System.out.println("Frase invertida: " + fraseInvertida);
    }
    public static String invertirPalabras(String frase) {
        String[] palabras = frase.split("\\s+");
        Stack<Character> pila = new Stack<>();
        StringBuilder resultado = new StringBuilder();
        for (String palabra : palabras) {
            for (char caracter : palabra.toCharArray()) {
                pila.push(caracter);
            }
            while (!pila.isEmpty()) {
                resultado.append(pila.pop());
            }
            resultado.append(" ");
        }
        return resultado.toString().trim();
    }
}
