package Dao;
import java.util.ArrayList;
import java.util.Random;
import Model.Aluno;

public class AlunoDao {
    
    public void insert(){
            FileSQLAluno arquivo = new FileSQLAluno();
            ArrayList<Aluno> listaAlunos = new ArrayList<>();
            Random aleatorio = new Random();


            for(int i=1; i<=50; i++){
            Aluno aluno = new Aluno();
            aluno.setId(i);
            aluno.setrgmAluno(1000000000+aleatorio.nextInt(1999999999));
            String[] nomes = {"Monkey D. Luffy", "Roronoa Zoro", "Nami Unknown", "Usopp Unknown", "Vinsmoke Sanji",  
            "Naruto Uzumaki", "Sasuke Uchiha", "Sakura Haruno", "Kakashi Hatake", "Hinata Hyuga",  
            "Son Goku", "Vegeta Saiyan", "Bulma Brief", "Piccolo Namekian", "Frieza Unknown",  
            "Eren Yeager", "Mikasa Ackerman", "Armin Arlert", "Levi Ackerman", "Erwin Smith",  
            "Light Yagami", "L Lawliet", "Misa Amane", "Nate River", "Ryuk Shinigami",  
            "Tanjiro Kamado", "Nezuko Kamado", "Zenitsu Agatsuma", "Inosuke Hashibira", "Kyojuro Rengoku",  
            "Edward Elric", "Alphonse Elric", "Winry Rockbell", "Roy Mustang", "Riza Hawkeye",  
            "Spike Spiegel", "Faye Valentine", "Jet Black", "Ein Corgi", "Vicious Unknown",  
            "Saitama Unknown", "Genos Unknown", "Tatsumaki Unknown", "Garou Unknown", "King Unknown",  
            "Lelouch Lamperouge", "Suzaku Kururugi", "Eren Krueger", "Kallen Stadtfeld", "Shirley Fenette"};
            aluno.setNome(nomes[aleatorio.nextInt(nomes.length)]);
            String[] emails ={"luffy.monkey@anime.com",
                            "zoro.roronoa@anime.com",
                            "nami.unknown@anime.com",
                            "usopp.unknown@anime.com",
                            "sanji.vinsmoke@anime.com",
                            "naruto.uzumaki@anime.com",
                            "sasuke.uchiha@anime.com",
                            "sakura.haruno@anime.com",
                            "kakashi.hatake@anime.com",
                            "hinata.hyuga@anime.com",
                            "goku.son@anime.com",
                            "vegeta.saiyan@anime.com",
                            "bulma.brief@anime.com",
                            "piccolo.namekian@anime.com",
                            "frieza.unknown@anime.com",
                            "eren.yeager@anime.com",
                            "mikasa.ackerman@anime.com",
                            "armin.arlert@anime.com",
                            "levi.ackerman@anime.com",
                            "erwin.smith@anime.com",
                            "light.yagami@anime.com",
                            "l.lawliet@anime.com",
                            "misa.amane@anime.com",
                            "nate.river@anime.com",
                            "ryuk.shinigami@anime.com",
                            "tanjiro.kamado@anime.com",
                            "nezuko.kamado@anime.com",
                            "zenitsu.agatsuma@anime.com",
                            "inosuke.hashibira@anime.com",
                            "kyojuro.rengoku@anime.com",
                            "edward.elric@anime.com",
                            "alphonse.elric@anime.com",
                            "winry.rockbell@anime.com",
                            "roy.mustang@anime.com",
                            "riza.hawkeye@anime.com",
                            "spike.spiegel@anime.com",
                            "faye.valentine@anime.com",
                            "jet.black@anime.com",
                            "ein.corgi@anime.com",
                            "vicious.unknown@anime.com",
                            "saitama.unknown@anime.com",
                            "genos.unknown@anime.com",
                            "tatsumaki.unknown@anime.com",
                            "garou.unknown@anime.com",
                            "king.unknown@anime.com",
                            "lelouch.lamperouge@anime.com",
                            "suzaku.kururugi@anime.com",
                            "cc.unknown@anime.com",
                            "kallen.stadtfeld@anime.com",
                            "shirley.fenette@anime.com"};
            aluno.setEmail(emails[aleatorio.nextInt(emails.length)]);
            String[] senhas = {"Monkey D. Luffy", "luffy.monkey@anime.com", "ChapéuDePalha2024!",
    "Roronoa Zoro", "zoro.roronoa@anime.com", "Santoryu#3Espadas",
    "Nami", "nami.unknown@anime.com", "MapaDoTesouro$",
    "Usopp", "usopp.unknown@anime.com", "SniperGodUsopp",
    "Vinsmoke Sanji", "sanji.vinsmoke@anime.com", "PernaNegra@Sanji",
    "Naruto Uzumaki", "naruto.uzumaki@anime.com", "RamenIchiraku!",
    "Sasuke Uchiha", "sasuke.uchiha@anime.com", "VingançaUchiha",
    "Sakura Haruno", "sakura.haruno@anime.com", "PunchSakura2024",
    "Kakashi Hatake", "kakashi.hatake@anime.com", "CopyNinja$999",
    "Hinata Hyuga", "hinata.hyuga@anime.com", "ByakuganLove#1",
    "Son Goku", "goku.son@anime.com", "KamehamehaWave",
    "Vegeta", "vegeta.saiyan@anime.com", "PrideOfSaiyans",
    "Bulma Brief", "bulma.brief@anime.com", "CapsuleCorp@66",
    "Piccolo", "piccolo.namekian@anime.com", "SpecialBeam++",
    "Frieza", "frieza.unknown@anime.com", "DeathBallPlanet",
    "Eren Yeager", "eren.yeager@anime.com", "Tatakae!Freedom",
    "Mikasa Ackerman", "mikasa.ackerman@anime.com", "ScarfMikasa<3",
    "Armin Arlert", "armin.arlert@anime.com", "ExplosionScience",
    "Levi Ackerman", "levi.ackerman@anime.com", "CleanFreak100%",
    "Erwin Smith", "erwin.smith@anime.com", "ShinzouSasageyo",
    "Light Yagami", "light.yagami@anime.com", "JusticeKira2024",
    "L Lawliet", "l.lawliet@anime.com", "SweetTooth$$$",
    "Misa Amane", "misa.amane@anime.com", "MisaMisaAngel",
    "Near", "nate.river@anime.com", "NearWhite2024",
    "Ryuk", "ryuk.shinigami@anime.com", "AppleShinigami",
    "Tanjiro Kamado", "tanjiro.kamado@anime.com", "WaterBreathing1",
    "Nezuko Kamado", "nezuko.kamado@anime.com", "DemonsDontCry",
    "Zenitsu Agatsuma", "zenitsu.agatsuma@anime.com", "ThunderClap&Flash",
    "Inosuke Hashibira", "inosuke.hashibira@anime.com", "BoarHeadWild!",
    "Kyojuro Rengoku", "kyojuro.rengoku@anime.com", "FlameHashira#9",
    "Edward Elric", "edward.elric@anime.com", "AutoMailArm2024",
    "Alphonse Elric", "alphonse.elric@anime.com", "BloodSealAl$",
    "Winry Rockbell", "winry.rockbell@anime.com", "WrenchMechanic",
    "Roy Mustang", "roy.mustang@anime.com", "FlameAlchemist@",
    "Riza Hawkeye", "riza.hawkeye@anime.com", "HawkEyeSniper",
    "Spike Spiegel", "spike.spiegel@anime.com", "SeeYouSpaceCowboy",
    "Faye Valentine", "faye.valentine@anime.com", "BountyHunter$$",
    "Jet Black", "jet.black@anime.com", "JetBlackDog99",
    "Ein", "ein.corgi@anime.com", "DataDogCorgi",
    "Vicious", "vicious.unknown@anime.com", "RedDragonVicious",
    "Saitama", "saitama.unknown@anime.com", "100PushupsDaily",
    "Genos", "genos.unknown@anime.com", "Incinerate!!!",
    "Tatsumaki", "tatsumaki.unknown@anime.com", "TornadoOfPsycho",
    "Garou", "garou.unknown@anime.com", "HeroHunter666",
    "King", "king.unknown@anime.com", "LuckyKing777",
    "Lelouch Lamperouge", "lelouch.lamperouge@anime.com", "AllHailLelouch",
    "Suzaku Kururugi", "suzaku.kururugi@anime.com", "LiveGeass++",
    "C.C.", "cc.unknown@anime.com", "PizzaHutCheese",
    "Kallen Stadtfeld", "kallen.stadtfeld@anime.com", "RedKnightmare$$",
    "Shirley Fenette", "shirley.fenette@anime.com", "PeacefulShirley"};
aluno.setSenha(senhas[aleatorio.nextInt(senhas.length)]);


    listaAlunos.add(aluno);
    }

    for (Aluno aluno : listaAlunos) {
        arquivo.writeInsertStatement(aluno.stringSql());
    }

    System.out.println("Alunos cadastrados!");
 }
}