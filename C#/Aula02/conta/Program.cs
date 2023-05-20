namespace conta
{
  public class Program
  {
    static void Main(string[] args)
    {
      // Conta conta = new Conta();
      // System.Console.WriteLine("Meu saldo: " + conta.getSaldo());
      // conta.deposito(10);
      // System.Console.WriteLine("Meu novo saldo: " + conta.getSaldo());


      ContaEspecial contaEspecial = new ContaEspecial();
      System.Console.WriteLine("Meu saldo: " + contaEspecial.getSaldo());
      contaEspecial.deposito(10);
      System.Console.WriteLine("Meu novo saldo: " + contaEspecial.getSaldo());
    }
  }
}