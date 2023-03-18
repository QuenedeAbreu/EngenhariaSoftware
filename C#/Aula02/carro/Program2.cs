// public class Program
// {
//   public static void Main(string[] args)
//   {
//     // System.Console.WriteLine("Digite seu nome");
//     // string? nome = Console.ReadLine();
//     // System.Console.WriteLine("Digite sua idade");
//     // int? idade = Convert.ToInt32(Console.ReadLine());

//     // System.Console.WriteLine("Você digitou - > " + nome + " - Sua idade : " + idade);


//     System.Console.WriteLine("Digite seu nome");
//     string? nome = Console.ReadLine();
//     System.Console.WriteLine("Digite sua idade");
//     int? idade = Convert.ToInt32(Console.ReadLine());

//     System.Console.WriteLine("Digite sua altura");
//     double? altura = Convert.ToDouble(Console.ReadLine());


//     System.Console.WriteLine("Digite seu peso");
//     double? peso = Convert.ToDouble(Console.ReadLine());

//     imc(nome, idade, altura, peso);


//   }
//   static void imc(string? nome, int? idade, double? altura, double? peso)
//   {
//     double? imc = (peso / (altura * altura));

//     string resultado;
//     if (imc > 18.5)
//     {
//       resultado = "Abaixo do peso";
//     }
//     else if (imc >= 18.5 && imc < 25)
//     {
//       resultado = "Peso normal";
//     }
//     else if (imc >= 25 && imc < 30)
//     {
//       resultado = "Pré-Obesidade";
//     }
//     else
//     {
//       resultado = "Muito Obeso";
//     }


//     System.Console.WriteLine("Seu nome " + nome + "sua idade" + idade + " seu IMC " + imc + " - " + resultado);
//   }

// }