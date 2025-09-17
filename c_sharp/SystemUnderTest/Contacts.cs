namespace SystemUnderTest {
    public class Contacts {
        public class Info {
            public string FirstName { get;  set; }
            public string LastName { get;  set; }
            public string GitHubUsername { get;  set; }
        }

        public static Info get(string name) {
            Info info = new Info() { FirstName = "Paul",
                LastName = "Moore", 
                GitHubUsername = "pdmoore"
            };

            return info;
        }
    }
}