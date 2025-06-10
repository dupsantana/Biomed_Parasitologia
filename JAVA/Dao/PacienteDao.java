package Dao;

import java.util.ArrayList;
import java.util.Random;

import Model.Paciente;

public class PacienteDao {
    
    public void insert(){
        FileSQLPaciente insert = new FileSQLPaciente();
        ArrayList<Paciente> listaPacientes = new ArrayList<>();
        Random aleat = new Random();


        for(int i=1; i<=50; i++){
            Paciente paciente = new Paciente();
            String[] nomes = {"Hinata Hyuga", "Zero Two", "Mikasa Ackerman", "Asuna Yuuki", "Rias Gremory", "Kaguya Shinomiya", "Mai Sakurajima", "Nami", "Robin", "Hancock", "Erza Scarlet", "Lucy Heartfilia", "Juvia Lockser", "Mirajane Strauss", "Levy McGarden",
            "Nezuko Kamado", "Shinobu Kocho", "Mitsuri Kanroji", "Kanao Tsuyuri", "Kyouko Hori", "Rem", "Emilia", "Ram", "Felix Argyle", "Crusch Karsten", "Yumeko Jabami", "Mary Saotome", "Midari Ikishima", "Kirari Momobami", "Ririka Momobami", "Yor Forger", "Anya Forger", "Rebecca", "Power", "Makima", "Himiko Toga", "Ochaco Uraraka", "Momo Yaoyorozu", "Mina Ashido", "Tsuyu Asui",
            "Raphtalia", "Filo", "Melty", "Sadina", "Sadeena", "Shalltear Bloodfallen", "Albedo", "Narberal Gamma", "Solution Epsilon", "Lupusregina Beta"};
            
            
            String[] dataNasc = {"15/05/1995", "22/08/1998", "03/12/1990", "19/03/1993", "27/07/1987",
            "08/11/1996", "14/09/1991", "01/04/1999", "25/02/1994", "30/06/1989",
            "12/10/1997", "05/01/1992", "18/07/1985", "23/09/2000", "09/03/1988",
            "28/05/1995", "16/12/1998", "04/08/1991", "21/11/1993", "07/02/1997",
            "13/06/1990", "24/04/1999", "02/10/1994", "17/01/1986", "29/07/1992",
            "10/09/1996", "26/03/1989", "06/05/2001", "20/12/1995", "11/08/1998",
            "31/10/1993", "14/02/1997", "22/06/1990", "08/04/1999", "03/01/1994",
            "19/07/1988", "27/11/1996", "09/05/1991", "25/09/2000", "15/03/1995",
            "30/08/1998", "12/12/1992", "05/06/1987", "23/10/1999", "18/02/1994",
            "07/07/1997", "28/01/1990", "16/04/1993", "24/11/1996", "01/09/1989"
            };

            String[] telefone = {"11987654321", "21912345678", "11955556666", "21999998888", "11911223344",
            "21944332211", "11966778899", "21955443322", "11998765432", "21987654321",
            "11933445566", "21922334455", "11977889900", "21966554433", "11945678901",
            "21934567890", "11956789012", "21945678901", "11967890123", "21956789012",
            "11978901234", "21967890123", "11989012345", "21978901234", "11990123456",
            "21989012345", "11901234567", "21990123456", "11912345098", "21901234567",
            "11923456098", "21912345098", "11934567098", "21923456098", "11945678098",
            "21934567098", "11956789098", "21945678098", "11967890098", "21956789098",
            "11978901098", "21967890098", "11989012098", "21978901098", "11990123098",
            "21989012098", "11901234098", "21990123098", "11912345987", "21901234098"
            };

            String[] email = {
                "hinata.hyuga@otaku.com", "zero.two@otaku.com", "mikasa.ackerman@otaku.com", 
                "asuna.yuuki@otaku.com", "rias.gremory@otaku.com", "kaguya.shinomiya@otaku.com",
                "mai.sakurajima@otaku.com", "nami@otaku.com", "robin@otaku.com", "hancock@otaku.com",
                "erza.scarlet@otaku.com", "lucy.heartfilia@otaku.com", "juvia.lockser@otaku.com",
                "mirajane.strauss@otaku.com", "levy.mcgarden@otaku.com", "nezuko.kamado@otaku.com",
                "shinobu.kocho@otaku.com", "mitsuri.kanroji@otaku.com", "kanao.tsuyuri@otaku.com",
                "kyouko.hori@otaku.com", "rem@otaku.com", "emilia@otaku.com", "ram@otaku.com",
                "felix.argyle@otaku.com", "crusch.karsten@otaku.com", "yumeko.jabami@otaku.com",
                "mary.saotome@otaku.com", "midari.ikishima@otaku.com", "kirari.momobami@otaku.com",
                "ririka.momobami@otaku.com", "yor.forger@otaku.com", "anya.forger@otaku.com",
                "rebecca@otaku.com", "power@otaku.com", "makima@otaku.com", "himiko.toga@otaku.com",
                "ochaco.uraraka@otaku.com", "momo.yaoyorozu@otaku.com", "mina.ashido@otaku.com",
                "tsuyu.asui@otaku.com", "raphtalia@otaku.com", "filo@otaku.com", "melty@otaku.com",
                "sadina@otaku.com", "sadeena@otaku.com", "shalltear.bloodfallen@otaku.com",
                "albedo@otaku.com", "narberal.gamma@otaku.com", "solution.epsilon@otaku.com",
                "lupusregina.beta@otaku.com"
            };

            String[] nomeMae = {
                "Akemi Tanaka", "Michiko Yamamoto", "Hanako Suzuki", "Yuki Takahashi", "Sakura Kobayashi",
                "Aiko Ito", "Hana Nakamura", "Yumi Watanabe", "Keiko Saito", "Naoko Kato",
                "Tomoko Yoshida", "Rei Yamada", "Miyuki Sasaki", "Eriko Matsumoto", "Ayame Inoue",
                "Kasumi Kimura", "Shizuka Hayashi", "Megumi Shimizu", "Rin Yamaguchi", "Hotaru Mori",
                "Aoi Fujita", "Chie Ikeda", "Eri Hashimoto", "Fumiko Ozawa", "Haru Okada",
                "Kaori Endo", "Mai Hara", "Naomi Fukuda", "Rika Kaneko", "Sachiko Ota",
                "Yoko Nagata", "Yui Nakagawa", "Asami Ogawa", "Chiyo Masuda", "Emi Nishimura",
                "Hiroko Ueda", "Junko Murakami", "Kana Sakurai", "Maki Takagi", "Natsuki Ono",
                "Reina Ishii", "Sayuri Fujii", "Tomoyo Kuroda", "Wakana Honda", "Yuka Miyazaki",
                "Airi Sato", "Moe Yamashita", "Rin Aoki", "Saki Fujimoto", "Yumi Saito"
            };

            String[] medicamento = { 
                    "1" , "2"
                    };

            int resultado_med = aleat.nextInt(medicamento.length);
            if (resultado_med == 2 ){
                paciente.setMedicamento(false);
            }else{
                paciente.setMedicamento(true);
                String[] nome_medicamento = {
            "Amoxicilina", "Dipirona",  "Losartana",
            "Atorvastatina", "Metformina", "AAS",
            "Dorflex"
            };
            paciente.setNome_medicamento(nome_medicamento[aleat.nextInt(nome_medicamento.length)]);

            };

            paciente.setNome(nomes[aleat.nextInt(nomes.length)]);
            paciente.setDataNasc(dataNasc[aleat.nextInt(dataNasc.length)]);
            paciente.setTelefone(telefone[aleat.nextInt(telefone.length)]);
            paciente.setEmail(email[aleat.nextInt(email.length)]);
            paciente.setNomeMae(nomeMae[aleat.nextInt(nomeMae.length)]);

            listaPacientes.add(paciente);
        }

        for(Paciente ex : listaPacientes){
            insert.writeInsertStatement(ex.stringSql());
        }
    }

}