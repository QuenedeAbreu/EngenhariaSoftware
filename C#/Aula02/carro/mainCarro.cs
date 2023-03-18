namespace Aula02
{
  public class mainCarro
  {
    public static void Main()
    {

      Carro carro = new Carro();
      carro.setId(1);
      carro.setNome("Ferrari");
      carro.setVeloxMax(300);
      System.Console.WriteLine("Nome: " + carro.nome + " - Velocidade: " + carro.VeloxMax);

      CarroOffRoad carro2 = new CarroOffRoad();

      carro2.step = true;
      carro2.setId(1);
      System.Console.WriteLine(carro2.step);
    }

  }
}