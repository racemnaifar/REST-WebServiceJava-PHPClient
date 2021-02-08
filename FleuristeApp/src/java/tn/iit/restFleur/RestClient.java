
package tn.iit.restFleur;

import java.util.List;
import javax.jws.WebParam;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.QueryParam;
import javax.ws.rs.core.MediaType;
import tn.iit.dao.ClientBD;
import tn.iit.entity.Client;


@Path("client")
public class RestClient {

    @Context
    private UriInfo context;

    public RestClient() {
    }
    @GET
    @Produces(MediaType.APPLICATION_XML)
    public List<Client> getListClients() {       
            return ClientBD.getListClient();
    }
    @POST
    @Produces(MediaType.APPLICATION_XML)
    public void addClient(@WebParam Client client) {
            ClientBD.addClient(client);
    }
    @DELETE
    @Produces(MediaType.APPLICATION_XML)
    public void deleteClient(@QueryParam("username") String username) {
            ClientBD.deleteClient(username);
    }
    
    @GET
    @Path("GetById")
    @Produces(MediaType.APPLICATION_XML)
    public Client find(@QueryParam("username") String username) {
            return ClientBD.getClient(username);
    }
}
