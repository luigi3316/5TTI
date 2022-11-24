using System;

namespace JeuDame_Projet
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Bienvenu au jeu de dame ");
            Console.ReadLine();

            Console.WriteLine("appuyer sur 'enter' pour charger le jeu !");
            Console.ReadLine();

            Console.WriteLine("5%");
            Console.WriteLine("14%");
            Console.WriteLine("23%");
            Console.WriteLine("25%");
            Console.WriteLine("51%");
            Console.WriteLine("55%");
            Console.WriteLine("63%");
            Console.WriteLine("78%");
            Console.WriteLine("99%");
            Console.WriteLine("100%");

            Console.WriteLine("le jeu est charger, appuyer sur 'enter' pour commencer le jeu! ");
            Console.ReadLine();

            string player1 = "";
            Console.WriteLine("comment vous appeler vous?", player1);
            player1 = Console.ReadLine();

            Console.WriteLine("");
            Console.WriteLine("bienvenu(e)"+ " " + player1);

            Console.WriteLine("");
            Console.WriteLine("Voici le plateau de jeu");

            Console.WriteLine("");
            Console.WriteLine("");
            int[,] Tab_Pion = new int[10, 10];
            ConstruireMatrice(ref Tab_Pion);
            PionBlanc(ref Tab_Pion);
            PionNoir(ref Tab_Pion);
            AfficherMatrice(Tab_Pion);

            Console.WriteLine("");
            AvancementPionBlanc_premierDeplacement(ref Tab_Pion, ref player1);
        }

        static void ConstruireMatrice(ref int[,] Tab_pion)
        {
            int nbrLigne = Tab_pion.GetLength(0);
            int nbrColonne = Tab_pion.GetLength(1);
            for (int i = 0; i < nbrLigne; i++)
            {
                for (int j = 0; j < nbrColonne; j++)
                {
                    Tab_pion[i, j] = 0;
                }
            }
        }

        static void AfficherMatrice(int[,] Tab_Pion)
        {
            int nbrLigne = Tab_Pion.GetLength(0);
            int nbrColonne = Tab_Pion.GetLength(1);

            for (int i = 0; i < nbrLigne; i++)
            {
                for (int j = 0; j < nbrColonne; j++)
                {
                    Console.Write(Tab_Pion[i, j]);
                }
                Console.WriteLine();
            }

        }
        static void PionBlanc(ref int[,] Tab_Pion) // placement des pions blanc sur le plateau de jeu
        {

            for (int i = 0; i < 4; i++) //pour les ligne de 0 => 3
            {
                int StartValue;
                if (i % 2 == 0) //modulo= paire ou impaire
                {
                    StartValue = 0;
                }

                else
                {
                    StartValue = 1;
                }

                for (int j = StartValue; j < 10; j = j + 2)
                {
                    Tab_Pion[i, j] = 1;
                }
            }
        }

        static void PionNoir(ref int[,] Tab_Pion) //placement des pions noirs sur le plateau de jeu
        {

            for (int i = 6; i < 10; i++) //pour les ligne de 6 => 9
            {
                int StartValue;
                if (i % 2 == 0) //modulo= paire ou impaire
                {
                    StartValue = 0;
                }

                else
                {
                    StartValue = 1;
                }

                for (int j = StartValue; j < 10; j = j + 2)
                {
                    Tab_Pion[i, j] = 2;
                }
            }
        }

        static void AvancementPionBlanc_premierDeplacement(ref int[,] Tab_Pion, ref string player1)
        {
            (int, int) coord_1;

            (int, int) a = (0, 6);
            (int, int) b = (2, 6);
            (int, int) c = (4, 6);
            (int, int) d = (6, 6);
            (int, int) e = (8, 6);

            Console.WriteLine("A votre tour de jouer" + " " + player1);
            Console.WriteLine("");

            Console.WriteLine("Donner les coordooné du pion que voulez vous deplacer");
            coord_1 = Console.ReadLine();

            if (coord_1 = a)
            {
                Console.WriteLine("le pion en (0, 6) peut etre deplacer seulement en (1, 5)");
                Console.WriteLine("votre pion a bien été deplacer");
                Tab_Pion[1, 5] = 2;
                Tab_Pion[0, 6] = 0;

                AfficherMatrice(Tab_Pion);
            }

            else if (coord_1 = b)
            {
                Console.WriteLine("le pion en (2, 6) peut etre deplacer en (1, 5) ou en (3, 5)");
                coord_1 = Console.ReadLine();

                Console.WriteLine("votre pion a bien été deplacer");

                if (coord_1 = (1, 5))
                {
                    Tab_Pion[1, 5] = 2;
                    Tab_Pion[2, 6] = 0;

                    AfficherMatrice(Tab_Pion);
                }
                else if (coord_1 = (3, 5))
                {
                    Tab_Pion[3, 5] = 2;
                    Tab_Pion[2, 6] = 0;

                    AfficherMatrice(Tab_Pion);
                }

            }
            else if (coord_1 = c)
            {
                Console.WriteLine("le pion en (4, 6) peut etre deplacer en (3, 5) ou en (5, 5)");
                coord_1 = Console.ReadLine();

                Console.WriteLine("votre pion a bien été deplacer");

                if (coord_1 = (3, 5))
                {
                    Tab_Pion[3, 5] = 2;
                    Tab_Pion[4, 6] = 0;

                    AfficherMatrice(Tab_Pion);
                }
                else if (coord_1 = (5, 5))
                {
                    Tab_Pion[5, 5] = 2;
                    Tab_Pion[4, 6] = 0;

                    AfficherMatrice(Tab_Pion);
                }
            }
            else if (coord_1 = d)
            {
                Console.WriteLine("le pion en (6, 6) peut etre deplacer en (5, 5) ou en (7, 5)");
                coord_1 = Console.ReadLine();

                Console.WriteLine("votre pion a bien été deplacer");

                if (coord_1 = (5, 5))
                {
                    Tab_Pion[5, 5] = 2;
                    Tab_Pion[6, 6] = 0;

                    AfficherMatrice(Tab_Pion);
                }
                else if (coord_1 = (7, 5))
                {
                    Tab_Pion[7, 5] = 2;
                    Tab_Pion[6, 6] = 0;

                    AfficherMatrice(Tab_Pion);
                }
            }
            else if (coord_1 = e)
            {
                Console.WriteLine("le pion en (8, 6) peut etre deplacer en (7, 5) ou en (9, 5)");
                coord_1 = Console.ReadLine();

                Console.WriteLine("votre pion a bien été deplacer");

                if (coord_1 = (5, 5))
                {
                    Tab_Pion[7, 5] = 2;
                    Tab_Pion[8, 6] = 0;

                    AfficherMatrice(Tab_Pion);
                }
                else if (coord_1 = (7, 5))
                {
                    Tab_Pion[9, 5] = 2;
                    Tab_Pion[8, 6] = 0;

                    AfficherMatrice(Tab_Pion);
                }
            }
            else
            {
                Console.WriteLine("Vous ne pouvez pas deplacer ce pion");
            }
        }
    }
}
