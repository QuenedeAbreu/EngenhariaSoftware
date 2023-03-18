namespace conta
{
  public class ContaEspecial : Conta
  {
    private double taxa = 1;

    public void setTaxa(double taxa)
    {
      this.taxa = taxa;
    }
    public double GetTaxa()
    {
      return this.taxa;
    }
    //Sobreescrever 
    public override void deposito(double deposito)
    {
      base.deposito(deposito - taxa);
    }
  }
}