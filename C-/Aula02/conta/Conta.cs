namespace conta
{
  public class Conta
  {

    protected double Saldo { set; get; }
    public void setSaldo(double saldo)
    {
      this.Saldo = saldo;
    }
    public double getSaldo()
    {
      return this.Saldo;
    }

    public virtual void deposito(double deposito)
    {
      this.Saldo += deposito;
    }
    public void sacar(double sacar)
    {
      this.Saldo -= sacar;
    }
  }
}
