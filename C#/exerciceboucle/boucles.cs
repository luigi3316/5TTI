using System;

namespace Boucles
{
    class Program
    {
        static void main(int n, out string resultfinale)
        {
            resultfinale = "";

            /* boucle for*/
            for (int a = 1; a < n; a++)
            {
                if((n % a) == 0)
                {
                    resultfinale = resultfinale + "," + a;
                }

            }

        }
        static void main(string[]args)
        {
            int n;
            string resultfinale;

            Console.WriteLine();
            n = int.Parse(Console.ReadLine("qu elle nombre voulez vous rentrer"));

            Console.WriteLine("le nombre "{n}" est divisible par "{resultfinale}"));
    
            Console.WriteLine();
        }