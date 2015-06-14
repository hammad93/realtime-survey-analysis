using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data.Entity; 


namespace WebApplication4.Models
{
    public class Survey
    {

        public int ID { get; set; }
        public string Title { get; set; }
        public DateTime  DateCreated { get; set; }  

    }

  

    public class MovieDBContext: ApplicationDbContext{

        public DbSet<Survey> Survey {get; set; }

    }
}