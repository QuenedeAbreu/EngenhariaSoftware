using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Projeto
{
    public class User
    {
        public string? id { set; get; }
        public string? name { set; get; }
        public string? email { set; get; }
        
        public User()
        {
        }
        public User(string id, string name = "null", string email = "null") {
            this.id = id;
            this.name = name;
            this.email = email;
        }
        
    }
}
