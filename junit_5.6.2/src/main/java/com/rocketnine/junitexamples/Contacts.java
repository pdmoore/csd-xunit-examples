package com.rocketnine.junitexamples;

public class Contacts {

    public static class Info {
        private final String firstName;
        private final String lastName;
        private final String githubUsername;

        public Info(String firstName, String lastName, String githubUsername) {
            this.firstName = firstName;
            this.lastName  = lastName;
            this.githubUsername = githubUsername;
        }

        public String getFirstName() {
            return firstName;
        }

        public String getLastName() {
            return lastName;
        }

        public String getGithubUsername() {
            return githubUsername;
        }
    }

    public static Info get(String name) {
        return new Info("Paul", "Moore", "pdmoore");
    }
}
