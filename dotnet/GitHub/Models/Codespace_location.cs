using System.Runtime.Serialization;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>The Azure region where this codespace is located.</summary>
    public enum Codespace_location {
        [EnumMember(Value = "EastUs")]
        EastUs,
        [EnumMember(Value = "SouthEastAsia")]
        SouthEastAsia,
        [EnumMember(Value = "WestEurope")]
        WestEurope,
        [EnumMember(Value = "WestUs2")]
        WestUs2,
    }
}