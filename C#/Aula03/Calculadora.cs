namespace Aula03
{
  public class Calculadora : ICalculadora
  {
    public int Soma(int nun1, int nun2)
    {
      return nun1 + nun2;
    }

    public int Subtracao(int nun1, int nun2)
    {
      return nun1 - nun2;
    }
  }
}