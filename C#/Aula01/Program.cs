

public class Program
{
  public static void Main()
  {
    int numero = 10;

    if (numero == 10)
    {
      int retorn = alterar(numero);
    }
    else { }
    System.Console.WriteLine(numero);

    int alterar(int a)
    {
      return a + 1;
    }

    string[] nomes = new string[] { "oi", "oi2", "oi3" };
    foreach (string nome in nomes)
    {
      System.Console.WriteLine(nome);
      break;
    }
  }

}
