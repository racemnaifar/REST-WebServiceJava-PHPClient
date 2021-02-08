
package tn.iit.dao;

import java.util.ArrayList;
import java.util.List;
import tn.iit.entity.Client;


public class ClientBD {
   private static List<Client> listClients = new ArrayList<Client>();
    static {
    listClients.add(new Client("Jiji Belghith","jihen.belghith@gmail.com","jihen123","jihen123"));
    listClients.add(new Client("Racem Naifar","racem.naifar@gmail.com","racem123","racem123"));
    listClients.add(new Client("Ahmed Krid","ahmed.krid@gmail.com","ahmed123","ahmed123"));
    }
    public static List<Client> getListClient() {
        return listClients;
    }

    public static void addClient(Client client) {
        listClients.add(client);
    }
    public static void deleteClient(String username) {
           for(Client clientIt: listClients) {
                    if(clientIt.getUsername().equals(username)) {
                        listClients.remove(clientIt);
                    }
           }
    }
    
    public static Client getClient(String username) {
         for(Client clientIt: listClients) {
                    if(clientIt.getUsername().equals(username)) {
                        return clientIt;
                    }
           }
         return null;
    }
}
