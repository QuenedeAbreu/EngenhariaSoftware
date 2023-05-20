// using System;
// using System.Collections.Generic;
// using System.Linq;
// using System.Threading.Tasks;

namespace Aula02
{
  public class Carro
  {
    private int id { get; set; }
    public string? nome { get; set; }
    public double VeloxMax { get; set; }

    public void setId(int id)
    {
      this.id = id;
    }
    public void setNome(string nome)
    {
      this.nome = nome;
    }

    public void setVeloxMax(double VeloxMax)
    {
      this.VeloxMax = VeloxMax;
    }


  }
}