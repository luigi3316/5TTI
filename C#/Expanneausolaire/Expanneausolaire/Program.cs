using System;

namespace Expanneausolaire
{
    class Program
    {
        static void ExercicePanneauSolaireInfo(double largM, double longM, double hc, double hp, out double nbPanneaux,out double prixTotal)
        {
            double versantToit;
            double npL;
            double npH;
         
            double hPan = 1.5;
            double lPan = 0.7;
            double prixPan = 489;

            versantToit = Math.Pow(Math.Pow((hp - hc), 2) + Math.Pow((largM / 2), 2), 0.5);
            npL = longM / lPan;
            npH = versantToit / hPan;
            nbPanneaux = npL * npH;
            prixTotal = nbPanneaux * prixPan;
        }

        static void Main(string[] args)
        {
            double largM;
            double longM;
            double hc;
            double hp;
            double nbPanneaux;
            double prixTotal;

            Console.WriteLine("bonjour, pouvez-vous entrer la largeur de votre maison");
            largM = double.Parse(Console.ReadLine());
           
            Console.WriteLine("bonjour, pouvez-vous entrer la longueur de votre maison");
            longM = double.Parse(Console.ReadLine());

            Console.WriteLine("bonjour, pouvez-vous entrer la hauteur de votre corniche de maison");
            hc = double.Parse(Console.ReadLine());

            Console.WriteLine("bonjour, pouvez-vous entrer la hauteur de votre pignon de maison");
            hp = double.Parse(Console.ReadLine());


            ExercicePanneauSolaireInfo(largM, longM, hc, hp, out nbPanneaux, out prixTotal);


            Console.WriteLine("le nombre de panneaux solaire est de ");
            Console.WriteLine(nbPanneaux);
            Console.WriteLine("le prix total des panneaux solaire est de");
            Console.WriteLine(prixTotal);
            Console.ReadLine();
        }
    }
}
