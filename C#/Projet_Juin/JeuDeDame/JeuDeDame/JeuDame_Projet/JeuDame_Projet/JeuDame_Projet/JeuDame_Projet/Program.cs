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
            AfficherMatrice(ref Tab_Pion);

            Console.WriteLine("");
            AvancementPionBlanc(ref Tab_Pion, ref player1);
            VerifCase(ref Tab_Pion);
            AfficherMatrice(ref Tab_Pion);
        }

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

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

        static void AfficherMatrice(ref int[,] Tab_Pion)
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

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

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
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        static void AvancementPionBlanc(ref int[,] Tab_Pion, ref string player1)
        {
            int LignePionBlanc;
            int ColonnePionBlanc;
            
            Console.WriteLine("Quelle numéro de ligne du pion que vous voulez avancer");
            LignePionBlanc = int.Parse(Console.ReadLine());

            Console.WriteLine("Quelle numéro de colonne du pion que vous voulez avancer");
            ColonnePionBlanc = int.Parse(Console.ReadLine());

            if(ColonnePionBlanc == 0)
            {
                //verif case haut droite
                if(VerifCase(ref Tab_Pion,LignePionBlanc - 1, ColonnePionBlanc + 1))
                {
                    Tab_Pion[LignePionBlanc, ColonnePionBlanc] = 0;
                    Tab_Pion[LignePionBlanc - 1, ColonnePionBlanc + 1] = 2;
                }

            }

            else if (ColonnePionBlanc == 9)
            {
                //verife case haut gauche 
                if (VerifCase(ref Tab_Pion, LignePionBlanc - 1, ColonnePionBlanc - 1))
                {
                    Tab_Pion[LignePionBlanc, ColonnePionBlanc] = 0;
                    Tab_Pion[LignePionBlanc - 1, ColonnePionBlanc - 1] = 2;
                }
                
            } 
            
            else 
            {

                //demander si aller soit à Gauche
                //sinon si aller à Droite
                //sinon faute
                Console.WriteLine("Déplacer le pion gauche ou droite?");

                if (Console.ReadLine() == "gauche") 
                {
                    Tab_Pion[LignePionBlanc, ColonnePionBlanc] = 0;
                    Tab_Pion[LignePionBlanc - 1, ColonnePionBlanc - 1] = 2;
                }
                else if (Console.ReadLine() == "droite")
                {
                    Tab_Pion[LignePionBlanc, ColonnePionBlanc] = 0;
                    Tab_Pion[LignePionBlanc - 1, ColonnePionBlanc + 1] = 2;
                }
                else
                {
                    Console.WriteLine("commande erroné");
                }
                    
                //+ verfifier une case haut a gauche ou a droite 
            }
        }

        static bool VerifCase(ref int[,] Tab_Pion, int LignePionBlanc, int ColonnePionBlanc)
        {
            if (Tab_Pion[LignePionBlanc, ColonnePionBlanc] == 2)
            {
                return false;
            }
            return true;
        }
    }
}
